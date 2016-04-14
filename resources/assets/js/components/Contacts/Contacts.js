module.exports = {

    template: require('./views/contacts.html'),

    data: function() {
        return{
        }
    },
    props: ['allUsers'],

    created:function(){
    },

    methods:
    {
        openMessager: function(user){
            this.$dispatch('open-messanger', user);
        }
    }
};