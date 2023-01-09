<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Homepage.css">
    <meta charset="UTF-8">
    <title>HH Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="?command=home">Healthy Habits</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="?command=addGroup">Add a Group<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Add an Activity</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
        </li>
        </ul>
    </div>
    </nav>
    <div class="HomepageHeader">
        <h1>Homepage</h1>
        <h3>Log an Activity</h3>
    </div>
    <div class="HomepageLeft">
        <form id = "ActivityLog" action = "?command=home" method = "post">
            <label for = "ActivityList">What did you do?</label>
            <select id = "ActivityList" name = "ActivityList">
                <option value = "Test1">Test1</option>
                <option value = "Test2">Test2</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="HomepageRight">
        <table>
            <tr>
                <th>Kane's Activities</th>
                <th>Kane's Points</th>
            </tr>
        </table>
        <table>
            <tr>
                <th>Dana's Activities</th>
                <th>Dana's Points</th>
            </tr>
        </table>
    </div>
</body>
</html>