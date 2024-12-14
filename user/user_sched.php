<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="sched.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
      rel="stylesheet"
    />

    <title>User Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/itk.png" alt="">
            </div>

            <span class="logo_name">User</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="user.html">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                
                <li><a href="user_dlist.php">
                    <i class="uil uil-user-nurse"></i>
                    <span class="link-name">Subjects</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">My Schedule</span>
                </a></li>
                <li><a href="user_price.php">
                    <i class="uil uil-receipt-alt"></i>
                    <span class="link-name">BCP Store</span>
                </a></li>
                <li><a href="user_mess.php">
                    <i class="uil uil-envelope-check"></i>
                    <span class="link-name">Announcements</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
           <img src="images/mal.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-schedule"></i>
                    <span class="text">Schedule</span>
                </div>
                <header class="jumbotron">
                    
                    
                    <p id="currentDay" class="lead time"></p>
                  </header>

                  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
      body {
    font-family: Arial, sans-serif;
    max-width: 3000px;
    margin: auto 0;
    padding: 20px;
    line-height: 1.7;
    color: black; 

}
h2{
    color: #818181;
}
h2.dark{
    color: black;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: white;
}

table, th, td {
    border: 2px solid #ddd;
    padding: 10px;
    text-align: left;
    background-color: white;
}

th {
    background-color: #f2f2f2;
}

form {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 20px;
}

input, select {
    width: 100%;
    padding: 8px;
    margin: 5px 0 15px 0;
    box-sizing: border-box;
}

.btn {
    display: inline-block;
    padding: 10px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
}

.btn-update {
    background-color: #2196F3;
}

.btn-delete {
    background-color: #f44336;
}

#errorMessage {
    color: red;
    margin-bottom: 15px;
}



    </style>
</head>
<body>
  

    <div id="errorMessage"></div>

    <form id="classForm">
        <input type="hidden" id="classId">
        <div>
            <label for="className">Class Name:</label>
            <input type="text" id="className" required>
        </div>
        <div>
            <label for="instructor">Instructor:</label>
            <input type="text" id="instructor" required>
        </div>
        <div>
            <label for="day">Day:</label>
            <select id="day" required>
                <option value="">Select Day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>
        </div>
        <div>
            <label for="time">Time:</label>
            <input type="time" id="time" required>
        </div>
        <button type="submit" id="submitBtn" class="btn">Add Class</button>
        <button type="button" id="cancelBtn" class="btn btn-delete" style="display:none;">Cancel</button>
    </form>

 
    <h2>Current Schedule</h2>
    <table id="classTable">
        <thead>
            <tr>
                <th>Class Name</th>
                <th>Instructor</th>
                <th>Day</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="classTableBody">
            
        </tbody>
    </table>

    <script>
        
        class ClassScheduleManager {
            constructor() {
               
                this.classes = JSON.parse(localStorage.getItem('classes')) || [];
                
               
                this.form = document.getElementById('classForm');
                this.tableBody = document.getElementById('classTableBody');
                this.submitBtn = document.getElementById('submitBtn');
                this.cancelBtn = document.getElementById('cancelBtn');
                this.errorMessage = document.getElementById('errorMessage');

             
                this.bindEvents();

               
                this.renderClasses();
            }

            bindEvents() {
                
                this.form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    this.saveClass();
                });

                
                this.cancelBtn.addEventListener('click', () => {
                    this.cancelUpdate();
                });
            }

           
            validateInput(className, instructor, day, time) {
                if (!className || !instructor || !day || !time) {
                    this.showError('All fields are required');
                    return false;
                }
                return true;
            }

            
            showError(message) {
                this.errorMessage.textContent = message;
                setTimeout(() => {
                    this.errorMessage.textContent = '';
                }, 3000);
            }

            
            saveClass() {
                const id = document.getElementById('classId').value;
                const className = document.getElementById('className').value;
                const instructor = document.getElementById('instructor').value;
                const day = document.getElementById('day').value;
                const time = document.getElementById('time').value;

               
                if (!this.validateInput(className, instructor, day, time)) return;

                
                if (id) {
                    
                    const index = this.classes.findIndex(c => c.id === id);
                    if (index !== -1) {
                        this.classes[index] = { id, className, instructor, day, time };
                    }
                } else {
                    
                    const newClass = { 
                        id: Date.now().toString(), 
                        className, 
                        instructor, 
                        day, 
                        time 
                    };
                    this.classes.push(newClass);
                }

                
                this.saveToLocalStorage();

                
                this.renderClasses();
                this.resetForm();
            }

            
            renderClasses() {
               
                this.tableBody.innerHTML = '';

                
                this.classes.forEach(cls => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${cls.className}</td>
                        <td>${cls.instructor}</td>
                        <td>${cls.day}</td>
                        <td>${cls.time}</td>
                        <td>
                            <button onclick="classManager.editClass('${cls.id}')" class="btn btn-update">Edit</button>
                            <button onclick="classManager.deleteClass('${cls.id}')" class="btn btn-delete">Delete</button>
                        </td>
                    `;
                    this.tableBody.appendChild(row);
                });
            }

            
            editClass(id) {
                
                const classToEdit = this.classes.find(c => c.id === id);
                
                if (classToEdit) {
                  
                    document.getElementById('classId').value = classToEdit.id;
                    document.getElementById('className').value = classToEdit.className;
                    document.getElementById('instructor').value = classToEdit.instructor;
                    document.getElementById('day').value = classToEdit.day;
                    document.getElementById('time').value = classToEdit.time;

                    
                    this.submitBtn.textContent = 'Update Class';
                    this.cancelBtn.style.display = 'inline-block';
                }
            }

            
            deleteClass(id) {
                
                if (!confirm('Are you sure you want to delete this class?')) return;

                
                this.classes = this.classes.filter(c => c.id !== id);

               
                this.saveToLocalStorage();
                this.renderClasses();
            }

            
            cancelUpdate() {
                this.resetForm();
            }

           
            resetForm() {
                this.form.reset();
                document.getElementById('classId').value = '';
                this.submitBtn.textContent = 'Add Class';
                this.cancelBtn.style.display = 'none';
            }

           
            saveToLocalStorage() {
                localStorage.setItem('classes', JSON.stringify(this.classes));
            }
        }

        
        const classManager = new ClassScheduleManager();
    </script>
</body>
</html>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script src="sched.js"></script>
</body>
</html>