let twitterApp = new Vue({
    el: "#twitter",
    data(){
        return {
            twitters: 222,
            aaa: 123,
        }
    },
    mounted () {
        axios
          .get('twitter/searchTwitter')
          .then(response => (this.twitters = response.data))
      }
});