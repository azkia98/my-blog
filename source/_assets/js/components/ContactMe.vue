<script>
import axios from "axios";
export default {
    data() {
        return {
            name: null,
            email: null,
            message: null,
            ultimate_peach_pinstriped_dishwasher: null
        };
    },
    methods: {
        sendTheMessage() {
            const config = {
                headers: {
                    Accept: "application/json",
                }
            };

            // console.log(this.ultimate_peach_pinstriped_dishwasher)

            if(this.ultimate_peach_pinstriped_dishwasher == false)
                this.ultimate_peach_pinstriped_dishwasher = true;

            axios
                .post(
                    "https://app.99inbound.com/api/e/7ASBUNLv",
                    {
                        name: this.name,
                        email: this.email,
                        message: this.message,
                        ultimate_peach_pinstriped_dishwasher: this.ultimate_peach_pinstriped_dishwasher
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