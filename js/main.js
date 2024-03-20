const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
    };
  },

  methods: {
    showInfo(index) {
      axios.get("./server.php?").then((res) => {
        console.log(res.data[3]);
      });
    },
  },

  mounted() {
    axios.get("./server.php").then((res) => {
      this.albums = res.data;
    });
  },
}).mount("#app");
