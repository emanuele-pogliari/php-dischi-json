const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
    };
  },

  methods: {
    showInfo(discIndex) {
      axios.get("./server.php?").then((res) => {
        console.log(discIndex);
        console.log(res.data[discIndex]);
      });
    },
  },

  mounted() {
    axios.get("./server.php").then((res) => {
      this.albums = res.data;
    });
  },
}).mount("#app");
