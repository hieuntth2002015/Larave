<html>
<head>
    <title>Employee Details</title>
</head>
<body>
<h4>Enter your details</h4>
<form method=POST action="exam4.php">
    <table>
        <tr>
            <td>Employee</td>
            <td><INPUT TYPE="text" NAME="empid"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><INPUT TYPE="text" NAME="Name"></td>
        </tr>
        <tr>
            <td>Department</td>
        <td>
            <INPUT TYPE="radio" NAME="dept" VALUE="Finance">Finance
            <INPUT TYPE="radio" NAME="dept" VALUE="Marketing">Marketing
            <INPUT TYPE="radio" NAME="dept" VALUE="IT">IT
        </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><INPUT TYPE="text" NAME="email"></td>
        </tr>
    </table>
    <br>
    <td><INPUT TYPE="submit" VALUE="SUBMIT"></td>
</form>
</body>
</html>