import store from './vuex/store'
import swal from 'sweetalert'

const typesNotifications = {
    notificationCompras: 'App\\Notifications\\NotificationCompras',
}

if(Laravel.user) {
    console.log(`App.User.${Laravel.user}`);
    window.Echo.channel(`App.User.${Laravel.user}`)
        .notification(notifications => {
            console.log(notifications)
            if(Laravel.user == notification.data){
                if(notification.type == typesNotifications.notificationCompras){
                    swal(
                        `Nova Comprar`,
                        `${notification.data}`,
                        'info'
                    )
                    store.commit('ADD_NOTIFICATION', notification);
                }
            }
        });
}