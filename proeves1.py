import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="",
    database="db_zaansemolen"
)

print("Type 1 if you want to see the dishes in the database or type 2 if you want to make your own dish with your recipe")
answer = input("What would you like to do? ")

if answer == '1':
    mycursor = mydb.cursor()
    mycursor.execute("SELECT * FROM tbl_gerecht")
    myresult = mycursor.fetchall()
    for row in myresult:
        print(row)

else:
    First = int(input("Okay. What number does this dish get? "))
    Second = input("What is the name of the dish? ")
    Third = float(input("How much does the dish cost? "))


    myc = mydb.cursor()
    sql = "INSERT INTO tbl_gerecht (gerechtid, naam, prijs) VALUES (%s, %s, %s)"
    val = (First, Second, Third)
    myc.execute(sql, val)
    mydb.commit()

    print("The dish is now registered.")



