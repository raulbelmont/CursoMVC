<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Inpactus Tecnologia">
  <meta name="description" content="<?php echo $this->getDescription(); ?>">
  <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->getTitle();?> </title>
  <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css'; ?>">
  <?php echo $this->addHead(); ?>
</head>
<body>
  <div class="Nav">
    <a href="<?php echo DIRPAGE; ?>">HOME</a>
    <a href="<?php echo DIRPAGE.'contato'; ?>">Contato</a>
  </div>

  <header class="Header">
    <img style="width:100%;" src="<?php echo DIRIMG."Banner.jpg"?>" alt="Banner do site"/>
    <?php
      use Src\classes\ClassBreadcrumb;
      $Breadcrumbs = new ClassBreadcrumb();
      $Breadcrumbs->addBreadcrumb();
    ?>
    <br><br>
    TEL.: 9 9999-9999
    <?php echo $this->addHeader(); ?>
  </header>

  <main class="Main">
    <?php echo $this->addMain(); ?>
  </main>

  <footer class="Footer">
    2019 - TODOS OS DIREITOS RESERVADOS INPACTUS TECNOLOGIA <BR/>
    <?php echo $this->addFooter(); ?>
  </footer>

</body>
</html>