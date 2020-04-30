
<div class="form">

<h2 class="right__title">Contact :</h2>



    <div class="starter-template">

        <?php if(array_key_exists('errors', $_SESSION)): ?>
            <div class="alert alert-danger">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php endif; ?>
        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="alert alert-success">
                Votre email a bien été envoyé
            </div>
        <?php endif; ?>


        <form action="post_contact.php" method="POST">
            <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
            <div class="row">
                <div class="col">
                    <?= $form->text('name', 'Votre Nom'); ?>
                </div>
                <div class="col">
                    <?= $form->email('email', 'Votre Email'); ?>
                </div>
                <div class="col">
                    <?= $form->select('service', 'Service', ['Contact', 'Nouveau commentaire', 'Problème technique']); ?>
                </div>
                <div class="col">
                    <?= $form->textarea('message', 'Votre message'); ?>
                    <?= $form->submit('Envoyer'); ?>
                </div>
            </div>
        </form>

    </div>

</div>





</body>
</html><?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>