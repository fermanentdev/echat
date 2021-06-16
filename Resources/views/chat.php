<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eChat</title>
    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
            rel="stylesheet"
    />
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-title text-center mb-2">eChat</div>
            <div class="card-body">
                <div id="chat">
                    <section class="chat-messages">
                        <?php while ($msg = mysqli_fetch_assoc($msgs)) { ?>
                            <p class="message"><?= $msg['created_at'] ?> <?= $msg['message_author'] ?>: <?= $msg['message_text'] ?></p>
                        <?php } ?>
                    </section>
                </div>
            </div>
            <div class="card-footer">
                <section class="chat-input-message">
                    <form action="/" method="post" id="msg-form">
                        <input type="text" value="<?= $_GET['au'] ?>" name="author" class="message-input w-100 form-control mb-3" placeholder="Input author name..." required>
                        <input type="text" name="msg" class="message-input w-100 form-control" placeholder="Input message text..." required>
                        <button class="btn btn-outline-dark mt-3 w-100" type="submit">Send</button>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js">
    </script>
</body>
</html>
