const { createApp } = Vue

createApp(
    {
        data() {
            return {
                content: [],
                prefixCard: '',
                showPreview: false,
                idCard: 0,
            }
        },
        methods: {
          saveId(id){
            console.log(id);
            this.idCard = id;
            this.showPreview = true;
            prefixCard = this.content[id]
            console.log(prefixCard);
          }
        },

        mounted() {
          axios.get('api.php')
          .then(response => {
            this.content = response.data
            console.log(this.content)
          })
        }

        

    }
).mount('#app')

