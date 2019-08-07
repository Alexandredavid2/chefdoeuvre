let vm = new Vue({

    el: '#app',

    data: {

        message: 'course',
        courses: [] 
    },

    
   
    mounted() {
        axios.get('courseList.php')
        .then(response => {
            console.log('response :' + response.data);
            this.courses = response.data;
        });
        

    }
})