<html>
<head>
    <title>Contact List</title>
</head>
<body>
    <h1>Contact List</h1>
        {% if tasks is not empty %}
            <p>Here are all of your tasks:</p>
            <ul>
                {% for task in tasks %}
                    <li>{{ task.getName }}</li>
                {% endfor %}
            </ul>
        {% endif %}

    <h2>Add New Contact</h2>
        <form action='/tasks' method='post'>
            <label for='description'>Name</label>
            <input id='description' name='description' type='text'>

            <button type='submit'>Add Task</button>
        </form>

        <form action='/delete_tasks' method='post'>
            <button type='submit'>Clear</button>
        </form>
        
</body>
</html>
