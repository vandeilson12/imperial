<template>

 <div class="content">

    <h6 v-for="notification in notifications" :key="notification.id">
       <p class="nos">
         {{ notification.notifiable_id}}
       </p>
    </h6>
    <p><span class="time">
       {{notifications.length}}
    </span></p>



</div>
</template>

<script>
export default{
    
    created(){
        this.loadNotifications();
    },

    computed: {
        notifications(){
            return this.notificationsItems;
        }
    },

    data(){
        return {
            notificationsItems: '',
            // link: 'https://localhot:8080/compras/'            
        }
    },

    methods:{
        loadNotifications(){
             axios.get('/notifications')
                .then(response => this.notificationsItems = response.data.notifications)

        }
    }
}
</script>
