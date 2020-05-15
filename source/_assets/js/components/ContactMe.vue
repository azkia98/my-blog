
<script>
import axios from "axios";
export default {
    data() {
        return {
            name: null,
            email: null,
            message: null,
            isSuccessNotificationActive: false
        };
    },
    methods: {
        sendTheMessage() {
            const config = {
                headers: {
                    Accept: "application/json"
                }
            };

            axios
                .post(
                    "https://app.99inbound.com/api/e/7ASBUNLv",
                    {
                        name: this.name,
                        email: this.email,
                        message: this.message
                    },
                    config
                )
                .then(res => {
                    Vue.$toast.open(res.data.submission_text);
                })
                .catch(err => {
                    Vue.$toast.open({
                        message: "Oops something went wrong!",
                        type: "warning"
                    });
                });
        }
    }
};
</script>

<style>
</style>