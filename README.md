# 🏥 Medical Diagnosis Web Application (Built with SWI-Prolog)

This is a simple web-based Medical Diagnosis System built using **SWI-Prolog**. The system allows users to log in, manage their profile, and query a knowledge base of common diseases for symptoms, causes, treatment, and prevention tips.

---

## 🚀 Features

- ✅ User Login Authentication
- ✅ View and Edit Personal Profile
- ✅ Dashboard Overview
- ✅ Disease Information Query (Causes, Symptoms, Treatment, Prevention)

---

## 🛠️ Technologies Used

- **SWI-Prolog** (with `http/thread_httpd`, `http/html_write`, `http/http_dispatch`, and `http/http_parameters` modules)
- **HTML** for frontend templates
- **CSS** for basic styling

---

## 📁 Project Structure


---

## 🧑‍💻 How to Run the Project

### 🖥️ Prerequisites

- [SWI-Prolog](https://www.swi-prolog.org/) installed

### ▶️ Steps

1. Open `SWI-Prolog`.
2. Load the server file:

```prolog
?- [server].
?- start_server.
http://localhost:8080/
User information is stored using the dynamic fact:
