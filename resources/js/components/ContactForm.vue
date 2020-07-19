<template>
  <div id="app">
    <div class="flex-center position-ref full-height">
      <form @submit="sendMessage">
        <div class="form-group">
          <label for="name">Name:</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Full Name"
            v-model="name"
            @keyup="buttonText = name"
            required
          />
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="name@example.com"
            v-model="email"
            required
          />
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea
            v-model="message"
            class="form-control"
            id="message"
            name="message"
            rows="3"
            required
          ></textarea>
        </div>
        <button type="submit" class="btn btn-primary" v-if="formSending == false">Submit</button>
        <div v-if="formSending == true" class="spinner-border text-dark" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <a href="/">
          <div class="btn btn-primary">Home</div>
        </a>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loaded: false,
      name: null,
      email: null,
      message: null,
      formSending: false
    };
  },
  mounted() {},
  methods: {
    sendMessage(e) {
      e.preventDefault();
      const self = this;
      self.formSending = true;

      axios
        .post("/contactus/ajax", {
          name: self.name,
          email: self.email,
          message: self.message
        })
        .then(response => {
          alert("Message Sent. Thank You!");
          alert(self.name + " " + response.data.message);
          self.formSending = false;
          self.name = null;
          self.email = null;
          self.message = null;
        })
        .catch(error => {
          console.log(error);
          alert("Error. Message couldnt be sent. Try again!");
          self.formSending = false;
        });
    }
  }
};
</script>

<style>
</style>
