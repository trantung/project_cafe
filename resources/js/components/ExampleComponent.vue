<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1>Users</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>customer_token</th>
                            <th>customer_phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users">
                            <td>
                                {{ user.customer_token }}
                            </td>
                            <td>
                                {{ user.customer_phone }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import firebase from 'firebase';

    export default {
        data () {
            return {
                customer_tokens: [] // mảng users chứa thông tin của các user lấy từ firebase về
            }
        },
        mounted() {
            firebase.initializeApp(window.firebaseConfig);
            // Khởi tạo firebase realtime database.
            firebase.database().ref('customer_tokens/').on('value', (snapshot) => {
                this.users = snapshot.val(); // Mỗi khi dữ liệu của users trên Firebase thay đổi, sẽ cập nhật vào mảng users.
            });
        }
    }
</script>