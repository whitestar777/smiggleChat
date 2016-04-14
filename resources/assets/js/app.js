var Vue = require('./vue');

Vue.use(require('./vue-resource'));

Vue.use(require('./vue-router'));

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({

    el: '#app',

    data:
    {
        allUsers: [],
        openUser: [],
        what: null
    },
    created:function(){
        this.fetchUsers();
        setInterval(function(){
           this.fetchUsers();
        }.bind(this), 2500);
    },
    components:
    {
        messanger: require('./components/Messages/Messanger'),

        contacts: require('./components/Contacts/Contacts')
    },

    events:
    {
        'open-messanger': function(userToOpen){
            this.openUser = userToOpen;
            $('#contactsSection').removeClass('large-12').addClass('large-8');
            this.$broadcast('open-for-messages');
        },
        'opened-messanger': function(){
            this.clearPending();
        },
        'message-send': function(){
            this.fetchUsers();

            //allUsers:[]
            //this.openUser.allMessages.push(message);
        },
        'close-messanger': function(){
            this.$broadcast('close-this');
            $('#contactsSection').removeClass('large-8').addClass('large-12');
        }

    },
    methods:
    {
        fetchUsers: function(){
            this.$http.get('/api/users/all').then(function(response)
            {
                this.allUsers = response.data;
                this.allUsers.forEach(function(user){
                    user.pending_messages = [];
                    user.allMessages =[];
                    user.send_messages.forEach(function(message){
                        message.color= 'blue';
                        user.allMessages.push(message);
                        if(message.status === 'pending'){
                         user.pending_messages.push(message);
                        }
                    });
                    user.receive_messages.forEach(function(message){
                        message.color= 'green';
                        user.allMessages.push(message);
                    });
                });
            }.bind(this)).catch(function(response)
            {
                this.errors = response.data;
            }.bind(this));
            if(this.openUser.id){
                this.updateOpenUser();
            }
        },
        clearPending: function(){
            var self = this;
            this.openUser.pending_messages.forEach(function (message) {
                message.status = 'seen';
                self.sendSeen(message);
            });
        },
        sendSeen: function(message){
            this.$http.post('/api/message/seen', message).then(function(response)
            {
            }.bind(this)).catch(function(response)
            {
                this.errors = response.data;
            }.bind(this));
        },
        updateOpenUser: function(){
            //if(this.openUser.id){
                this.allUsers.forEach(function(user){
                    if(user.id === this.openUser.id){
                        this.openUser = user;
                    }
                }.bind(this));
            //}
        }
    }

});