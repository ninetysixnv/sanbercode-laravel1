<!DOCTYPE html>
<head>
    <title>SanberBook</title>
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h3>Sign Up Form</h3>
    <form method="POST" action="/home">
        @csrf
            <p>First Name :</p>
            <input type="text" name="firstName">
            <p>Last Name :</p>
            <input type="text" name="lastName">
            <p>Gender :</p>
            <input type="radio">Male
            <br>
            <input type="radio">Female
            <br>
            <input type="radio">Other
            <p>Nationality :</p>
            <select name="nationality">
                <option value="indonesia">Indonesian</option>
                <option value="singapura">Singapuran</option>
                <option value="malaysia">Malaysian</option>
                <option value="australia">Australian</option>
            </select>
            <p>Language Spoken :</p>
            <input type="checkbox" value="bahasa">Bahasa Indonesia
            <br>
            <input type="checkbox" value="english">English
            <br>
            <input type="checkbox" value="other">Other
            <p>Bio :</p>
            <textarea rows="8" cols="30"></textarea>
            <br>
            <input type="submit" value="Sign Up">
    </form>
</body>
</html> 