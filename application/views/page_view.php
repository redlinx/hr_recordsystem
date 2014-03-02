<html>
<head>
<title>Sample</title>
</head>
<body>
    <div id='results'>
    <?php echo $this->table->generate($page_view_content); ?>
    <?php echo $this->pagination->create_links(); ?>
    </div>
</body>
</html>