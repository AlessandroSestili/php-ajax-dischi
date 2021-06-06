const app = new Vue({
    el: "#app",
    data: {
        callDefault: "http://localhost:8888/ProjsBooleanPHP/php-ajax-dischi/php/server.php",
        filters: {
            genre: "",
            itemToPage: "",
            page: "",
        },

        respCall: {},
        discsList: [],
        currentPage: 1,
    },
    methods: {
        callData() {
            axios.get(this.callDefault, {
                params: {
                    ...this.filters
                }
            })
                .then((resp) => {
                    this.respCall = resp.data
                    this.discsList = resp.data.data
                });
        },
        changePage(newPage) {
            if ((newPage === "previous") && (this.respCall.prevPage) ) {
                this.currentPage--
                this.filters.page = this.currentPage


                this.callData()

            } else if (newPage === "next" && (this.respCall.nextPage)) {
                this.currentPage++
                this.filters.page = this.currentPage

                this.callData()

            }

        }
    },
    mounted() {
        this.callData();
    },
})