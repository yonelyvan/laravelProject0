<template>
    <div class="dropdown-menu">
        <a class="dropdown-item" v-for="notification in notifications">
            {{notification.data}} notificacion
        </a>
    </div>
</template>

<script>
export default{
    props: ['user'],
    data(){
        return {notifications: []}
    },
    mounted(){
        axios.get('/api/notifications')
            .then(response=>{
                this.notifications = response.data;
                console.log(">>>>",this.notifications);
                
                Echo.private(`App.User.${this.user}`)
                .notification(notification => {
                    this.notifications.unshift(notification);
                })

            });
    }
}
</script>
