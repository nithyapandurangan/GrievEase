#Importing Packages
import streamlit as st
import mysql.connector
from mysql.connector import Error

#Function to auth the user
def auth_user(username,password):
    try:
        conn = mysql.connector.connect(host='localhost',database='Student_Cell',user='root',password='MuthuPandas9')
        cursor = conn.cursor()
        q = "select * from student_details where username = %s and password = %s"
        par = (username,password)
        cursor.execute(q,par)
        user_student = cursor.fetchone()

        if user_student:
            return True #redirect->Next page
        else:
            return False #Return to the same page
        
    except Error as x:
        print(x) # Printing error to the console
    
    finally:
        #always executed
        conn.close()
    
    return

def form():
    #st.set_page_config(page_title="Your Project NAme")
    st.title("Here")
    return

#Creating a login page
st.set_page_config(page_title="Login Page")

st.title("Name of your Project")

username = st.text_input("Enter Your Username")
password = st.text_input("Enter Your Password",type="password")
submit = st.button("Submit")
if submit:
    if auth_user(username,password):
            #redirect to the form page
        form()
    else:
         st.error("Invalid User Name or Password")
    

#Creating a page to get the form
st.title("Complaint Form")
name=st.text_input("enter your name")
email=st.text_input("enter your email id")
dept=st.selectbox(
    'Which department do you belong to?',
    ('AIDS','IoT,'B.COM','B.SC Economics'))
category = st.selectbox(
    'Which category does your complaint fall under?',
    ('Bullying/Ragging', 'LMS issues', 'Hostel issues','Others'))
st.write('You selected:', category)
details=st.text_input("Please describe the issue in detail")
submit=st.button("Submit")
if submit:
     st.success('Thank you for registering your complaint! We will resolve it soon')

