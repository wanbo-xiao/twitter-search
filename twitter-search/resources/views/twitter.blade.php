<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="twitter">
            <table class="table table-striped">
                <tbody>
                    <tr style="height: 75px" v-for="twitter in twitters">
                        <td style="width: 100px">
                            <img v-bind:src="twitter.image"/>
                        </td>
                        <td>@{{twitter.screen_name}}</td>
                        <td>@{{twitter.created_at}}</td>
                        <td>@{{twitter.text}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html> 
<script src="./js/app.js"></script>
<script src="./js/twitter.js"></script>
