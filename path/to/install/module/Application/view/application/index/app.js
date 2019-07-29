
new Vue({
    el:"#res"
})

Vue.component('listdatares',{
    data: function () {
        axios.get('/restaurant?lat=13.803011,100.538813,Bangsue)')
            .then(response => {
                this.restaurant = response.data
            })
    },
    template:'<tr v-for="restaurant2 in restaurant">' +
        '<td{{restaurant2.name}}</td>' +
        '<td>{{restaurant2.vicinity}}</td>' +
        '</tr>'
});


