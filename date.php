<?php
?>

<head>
  <link rel="stylesheet" href="https://unpkg.com/persian-datepicker@latest/dist/css/persian-datepicker.min.css"/>
  <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/persian-date@latest/dist/persian-date.min.js"></script>
  <script src="https://unpkg.com/persian-datepicker@latest/dist/js/persian-datepicker.min.js"></script>
</head>

<script type="text/javascript">
  $(document).ready(function() {
    $('.example1').persianDatepicker({
    observer: true,
    format: 'YYYY/MM/DD',
    altField: '.observer-example-alt'
});
  });
</script>

<input type="text" class="example1" />