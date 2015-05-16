<?php
$testData = array(	12345,
					12345.678,
					'Non Numeric',
					'<script>alert("XSS Attack");</script>');

$output = '<table border=1>';
$output .= '<tr><th>Escaped Original</th><th>Int</th><th>Float</th></tr>' . PHP_EOL;

foreach ($testData as $item) {
	$output .= '<tr>'
			 . '<td>' . htmlspecialchars($item) . '</td>'
			 . '<td>' . (int) $item 			. '</td>'
			 . '<td>' . (float) $item			. '</td>'
			 . '</tr>' . PHP_EOL;
}

echo $output;
echo '</table>' . PHP_EOL;