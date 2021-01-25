<template>
    <div>

        <h6>
            <notification  
                    v-for="notification in notifications" 
                    :key="notification.id"
                    :notification="notification">
                </notification>
                
        </h6>
            
            <a>
                 ({{ notifications.length}})
            </a>

            <!-- <div>

                <a href="#" @click.prevent="markAllAsRead">Limpar</a>
            </div> -->
    </div>

</template>

<script>
export default {

    created(){
        //this.loadNotifications()
        this.$store.dispatch('loadNotifications')
    },
    computed: {
        notifications(){
            return this.$store.state.notifications.items//this.notificationsItems;
        }
    },

    methods:{
        markAllAsRead(){
            this.$store.dispatch('markAllAsRead')
        }
    }

}
</script>

