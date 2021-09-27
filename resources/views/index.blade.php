<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@1.2.x/dist/index.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <div x-data="alpineInit()" x-init="init()">
        <template x-if="loggedIn">
            <div>
                <a href="/admin" x-show="isAdmin">后台</a>
                <a href="" @click.prevent="logout()">登出</a>
            </div>
        </template>
        <template x-if="!loggedIn">
            <div>
                <a href="/login">登入</a>
                <a href="/register">注册</a>
            </div>
        </template>
    </div>
    <script>
        function alpineInit() {
            return { 
                loggedIn: false,
                user: {},
                get authToken() {
                    return localStorage.getItem('authToken');
                },
                get isAdmin() {
                    return this.user.permission === 'admin';
                },
                init() {
                    if (this.authToken !== null) {
                        fetch('api/user', {
                                method: 'GET',
                                headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json',
                                    'Authorization': 'Bearer '+ this.authToken,
                                },
                        })
                        .then((response) => {
                            if(!response.ok) {
                                localStorage.removeItem('authToken');
                                this.loggedIn = false;
                                throw new Error('not found');
                            } else {
                                this.loggedIn = true;
                            }
                            return response.json();
                        })
                        .then((data) => {
                            this.user = data;
                        });
                    }
                },
                logout() {
                    fetch('api/user/logout', {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'Authorization': 'Bearer '+ this.authToken,
                            },
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        console.log(data);
                        localStorage.removeItem('authToken');
                        this.loggedIn = false;
                    });
                }

            } 
        }
    </script>
</body>
</html>