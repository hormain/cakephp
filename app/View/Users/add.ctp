<h1>Entrer un Pseudo </h1>

<?= $this->form->create('User'); ?>
<?= $this->form->input('name',array('label' =>'Votre pseudo')) ?>
<?= $this->form->end('Valider'); ?>