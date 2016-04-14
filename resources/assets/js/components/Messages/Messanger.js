module.exports = {

    template: require('./views/messanger.html'),

    data: function() {
        return{
            newMessage: null
        }
    },
    props: ['openUser'],

    created:function(){
    },

    events: {
        'open-for-messages': function() {
            $('#messanger').removeClass('hide');
            this.$dispatch('opened-messanger');
            //this.openUser.send_messages.forEach(function (message) {
            //    message.hello = 'seen';
                //user.allMessages.push(message);
            //});
        },
        'close-this': function(){
            $('#messanger').addClass('hide');
        }
    },

    methods:
    {
        sendMessage: function(){
            this.$http.post('/api/message/send', {'message': this.newMessage, 'toUser': this.openUser.id}).then(function(response)
            {
                this.$dispatch('message-send');
                this.newMessage = null;

            }.bind(this)).catch(function(response)
            {
                this.errors = response.data;
            }.bind(this));
        },
        closeMessanger: function(){
            this.$dispatch('close-messanger');
        }
    }
};