<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<script>
        $(function () {
            $('body').tour({
              steps: [{
                title: 'Welcome',
                content: '<p>Hello! Welcome to Tour.js demo.</p>'
              }, {
                content: '<p>This one won\'t run because the element is not visible.</p>',
                element: '.test-2'
              }, {
                content: '<p>No title<br>Unfortunately this library can only focus rectangles ):</p>',
                element: '.test-3'
              }, {
                content: '<p>Fixed elements are no problem.</p>',
                element: '.test-4'
              }, {
                content: '<p>Inline text</p>',
                element: '.test-5'
              }]
            });

            $('body').data('tour').start();

            $('body').on('tourend', function () {
              alert('Tour ended!');
            });

            $('body').on('stepchange', function (e, previousStep, nextStep) {
              console.log(previousStep, nextStep);
            });
        });
    </script>
</body>
</html>