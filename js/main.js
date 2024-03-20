const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
      showOverlayInfo: false,
      singleAlbum: [],
    };
  },

  methods: {
    showInfo(discIndex) {
      axios.get("./server.php?").then((res) => {
        this.singleAlbum = res.data[discIndex];
      });
      this.showOverlayInfo = !this.showOverlayInfo;
    },
  },

  mounted() {
    axios.get("./server.php").then((res) => {
      this.albums = res.data;
    });
  },
}).mount("#app");
