<template>
    <div id="app">
        <div class="flex-center position-ref full-height">
            <form class="p-5" method="post" action="/contactus">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Full Name"
                    />
                </div>
                <div class="form-group">
                    <label for="email">Email address: </label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="name@example.com"
                    />
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea
                        class="form-control"
                        id="message"
                        name="message"
                        rows="3"
                    ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <div btn btn-primary>
                    Click me to change text to name text
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return { loaded: false };
    },
    mounted() {},
    methods: {}
};
</script>

<style lang="stylus" scoped></style>
