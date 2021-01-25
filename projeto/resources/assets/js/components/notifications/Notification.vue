<template>
    <div>

            <span @click.prevent="markAsRead(notification.id)">Lida</span>
                 <a>{{ comment }}</a>
        
    </div>
</template>

<script>
export default{
    props: ['notification'],

    computed: {
        comment(){
            return this.notification.notifiable_id
        }
    },

    methods: {
        markAsRead(idNotification){
            this.$store.dispatch('markAsRead', {id:idNotification})
        }
    },
}
</script>