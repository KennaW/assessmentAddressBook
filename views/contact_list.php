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

        <form action='/new_contact' method='post'>
            <label for='name'>Name</label>
            <input id='name' name='name' type='text'>

            <label for='phone'>Phone</label>
            <input id='phone' name='phone' type='text'>

            <label for='address'>Address</label>
            <input id='address' name='address' type='text'>

            <button type='submit'>Add Task</button>
        </form>

        <form action='/delete_contacts' method='post'>
            <button type='submit'>Clear</button>
        </form>

</body>
</html>
