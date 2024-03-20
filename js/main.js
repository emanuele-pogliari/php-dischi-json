const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
    };
  },

  methods: {},

  mounted() {
    axios.get("./server.php").then((res) => {
      this.albums = res.data;
    });
  },
}).mount("#app");
