const { createApp } = Vue;

createApp({
  data() {
    return {};
  },

  methods: {},

  mounted() {
    axios.get("./server.php").then((res) => {
      console.log(res.data);
    });
  },
}).mount("#app");
