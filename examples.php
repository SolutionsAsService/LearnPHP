<?php include 'includes/header.php'; ?>
<section id="examples">
    <h2>PHP Examples and Use Cases</h2>
    <p>Here are some practical examples of PHP in action:</p>
    <h3>1. Dynamic Web Pages</h3>
    <pre>
        <code>
&lt;?php
$date = date('Y-m-d');
echo "Today's date is " . $date;
?&gt;
        </code>
    </pre>
    <h3>2. Form Handling</h3>
    <pre>
        <code>
&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, " . $name;
}
?&gt;
<form method="post" action="examples.php">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
        </code>
    </pre>
</section>
<?php include 'includes/footer.php'; ?>
