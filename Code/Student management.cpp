#include<iostream>
#include<fstream>
#include<unistd.h>
#include<string>
#include<conio.h>
#include<regex>

using namespace std;

char Role;

int main();
void menu();
void admin();
void student();
void AddStudent();
void DeleteStudent();
void DisplayStudents();
void SearchStudent();



bool Emailcheck(string email)
{
    regex pattern("\\w+\\.?\\w*@\\w+(\\.\\w+)+");
    return regex_match(email, pattern);
}
bool contact_no(string contact)
{
    regex pattern("01\[3456789]\\d{8}");
    return regex_match(contact, pattern);
}

void login()
{
    int count;
    string user,pass,reguser,regpass ;
    system("cls");



    if( Role == 'a')
    {
        cout <<"\t\t\t\t Your role has selected as an admin \t"<<endl;
        cout << "--------------------------------------------------------------------------------------------------\n\n\n";
        cout<<"\n\tPlease enter the following details to login"<<endl<<endl;
        cout<<"\tUSERNAME : ";
        cin>>user;
        cout<<"\tPASSWORD : ";
        cin>>pass;

        ifstream input("Admin_Registration_form.txt");
        while(input>>reguser>>regpass)
        {
            if(reguser==user && regpass==pass)
            {
                count=1;
                system("cls");
            }
        }
        input.close();
    }
    else
    {
        cout <<"\t\t\t\t Your role has selected as a student \t"<<endl;
        cout << "--------------------------------------------------------------------------------------------------\n\n\n";
        cout<<"\n\tPlease enter the following details to login"<<endl<<endl;
        cout<<"\tUSERNAME : ";
        cin>>user;
        cout<<"\tPASSWORD : ";
        cin>>pass;

        ifstream input("Student_Registration_form.txt");
        while(input>>reguser>>regpass)
        {
            if(reguser==user && regpass==pass)
            {
                count=1;
                system("cls");
            }
        }
        input.close();
    }


    if(count==1)
    {
        cout<<"\n\tHello "<<user<<"\n\tYou are successfully logged in \n"<<endl<<endl;
        if(Role=='s')
            student();
        else if(Role = 'a')
            admin();
    }
    else
    {
        cout<<"\n\tInvalid username and password combination.\n\tLet's try again or select ''forgot password'' option to recover your password"<<endl<<endl;
        menu();
    }
}


void registration()
{
    string reguser, regpass;

    cout << "                                 Welcome to Registration page                                                    \n\n";




    if(Role=='a')
    {
        cout <<"\t\t\t\t Your role has selected as an admin \t"<<endl;
        cout << "--------------------------------------------------------------------------------------------------\n\n\n";
        cout << "\tEnter your username and password "<<endl<<endl;
        cout << "\tEnter your username : ";
        cin >> reguser;
        cout << "\tEnter password : ";
        cin >> regpass;

        ofstream reg("Admin_Registration_form.txt", ios::app);
        reg << reguser <<' '<<regpass << endl;
        reg.close();
    }
    else
    {
        cout <<"\t\t\t\t Your role has selected as a student \t"<<endl;
        cout << "--------------------------------------------------------------------------------------------------\n\n\n";
        cout << "\tEnter your username and password "<<endl;
        cout << "\tEnter your username : ";
        cin >> reguser;
        cout << "\tEnter password : ";
        cin >> regpass;

        ofstream reg("Student_Registration_form.txt", ios::app);
        reg << reguser <<' '<<regpass << endl;
        reg.close();
    }

    cout <<" \n\t*Note : User name and password is required for next login.*\n";
    cout << "\n\n\tProcessing, Please Wait.....";
    sleep(6);
    system("cls");

    cout <<"\n\tRegistration Successful!"<< endl;

    cout <<"\n\n\tPress any key to return Main menu ";
    if(getch())
    {
        system("cls");
        menu();
    }

}


    void forgot()
    {
        system("cls");
        cout<<"\n\tDon't worry!! We're here to recover your password.\n";

        string searchuser,su,sp;

        int count=0;


        if(Role=='a')
        {
            cout <<"\t\t\t\t Your role has selected as an admin \t"<<endl<<endl;
            cout << "--------------------------------------------------------------------------------------------------\n\n\n";
            cout<<"\n\tEnter your username you remembered username :";
            cin>>searchuser;

            ifstream searchu("Admin_Registration_form.txt");
            while(searchu>>su>>sp)
            {
                if(su==searchuser)
                {
                    cout<<"\n\nYour account has founded.\n";
                    cout<<"\nYour password is : "<<sp<<endl<<endl;
                    count = 1;
                    cout <<"Press any key to go Login page ";
                    if(getch())
                        login();
                }
            }
            searchu.close();
        }
        else
        {
            cout <<"\t\t\t\t Your role has selected as a student \t"<<endl;
            cout << "--------------------------------------------------------------------------------------------------\n\n\n";
            ifstream searchu("Student_Registration_form.txt");
            while(searchu>>su>>sp)
            {
                if(su==searchuser)
                {
                    cout<<"\n\nYour account has founded.\n";
                    cout<<"\nYour password is : "<<sp<<endl<<endl;
                    count = 1;
                    cout <<"Press any key to go Login page ";
                    if(getch())
                        login();
                }
            }
            searchu.close();
        }
        if(count==1)
        {
            cin.get();
            cin.get();
            system("cls");
            menu();
        }
        else
        {
            cout<<"\n\tSorry, Your userID is not found in our database\n";
            cout<<"\n\tPlease contact with administrator for more details \n\tThank You";
            cin.get();
            cin.get();
            menu();
        }
    }



void menu()
{
    int option;
    cout << "--------------------------------------------------------------------------------------------------\n";
    cout << "                                 Welcome to MENU page                                                    \n\n";

    cout << "                                           MENU                                                                       \n\n\n";

    cout << "\t |  Press 1 to Login                             |"<<endl;
    cout << "\t |  Press 2 to Register                          |"<<endl;
    cout << "\t |  Press 3 if you forgot password               |"<<endl;
    cout << "\t |  Press 4 to change role                       |"<<endl <<  "\t ";
    cin >> option;
    system("cls");


    switch(option)
    {
    case 1:
        login();
        break;

    case 2:
        registration();
        break;

    case 3:
        forgot();
        break;

    case 4:
        main() ;
        break;

    default:
        cout << "Invalid Input !! \nPlease enter a valid choice!" << endl << endl;
        menu();
    }
}



void admin()
{
    string name, course, marks;
    int id, choice, option;


    cout << "                         Welcome to Student Record Management System                                                    \n\n";
    cout << "--------------------------------------------------------------------------------------------------\n";

    cout <<"\t\t\t\t Your role has selected as an admin \t"<<endl;
    cout << "--------------------------------------------------------------------------------------------------\n\n\n";

    cout << "                                           MENU                                                                       \n\n\n";

    cout << "\t |  Press 1 to Add a Student                             |"<<endl;
    cout << "\t |  Press 2 to Delete a Student                          |"<<endl;
    cout << "\t |  Press 3 to see all the students                      |"<<endl;
    cout << "\t |  Press 4 to Search a student                          |"<<endl ;
    cout << "\t |  Press 5 to Exit                                      |"<<endl <<  "\t ";
    cin >> option;
    system("cls");

    switch(option)
    {
    case 1:
        AddStudent();
        break;
    case 2:
        DeleteStudent();
        break;
    case 3:
        DisplayStudents();
        break;
    case 4:
        SearchStudent();
        break;
    case 5:
       {
            cout <<"\n\n\t Thanks for being with us.\n\t This STUDENT RECORD MANAGEMENT SYSTEM is developed by @Mahfujur Rahman"<<endl<<endl<<endl;
            exit(0);
       }
    }
}


void AddStudent()
{
    string id,FName, LName, course[6],contact, email;
    int  option;

    cout << "\n\n                                           Student information                                                                       \n\n\n";

    cout << "\t | Enter student ID : ";
    cin>>id;
    cout << "\t | Enter First name : ";
    cin>>FName;
    cout << "\t | Enter Last name : ";
    cin>>LName;
    contact:
    cout << "\t | Enter contact number : ";
    cin>>contact;
    if(!contact_no(contact))
    {
        cout <<"\t\t[ Invalid contact no! ]"<<endl;
        goto contact;
    }
    email:
      cout << "\t | Enter email address : ";
    cin>>email;
    if(!Emailcheck(email))
    {
        cout <<"\t\t[ Invalid email address! ]"<<endl;
        goto email;
    }
    cout <<"\t | Enter five courses  : ";
        cin>>course[1]>>course[2]>>course[3]>>course[4]>>course[5];




    ofstream reg("Student information.txt", ios::app);
    reg << id <<' '<<FName <<' '<<LName <<' '<< contact <<' '<< email<<' '<<course[1] <<' '<<course[2]<<' '<< course[3] <<' '<<course[4] <<' '<< course[5]<<endl;
    reg.close();

    system("cls");
    cout<<endl<<"\t"<<FName<<" "<<LName<<" has successfully registered to student list"<<endl;
    cout << "--------------------------------------------------------------------------------------------------\n\n\n";

    cout << "\t |  Press 1 to add another student                          |"<<endl;
    cout << "\t |  Press 2 to go previous menu                             |"<<endl;
    cout <<"\t  ";
    cin >> option;
    system("cls");

    switch(option)
    {
    case 1:
        AddStudent();
        break;
    case 2:
        admin();
    }


}


void DeleteStudent()
{

}


void DisplayStudents()
{
    string id, detail,FName, LName, contact, email;

    cout << "\n--------------------------------------------------------------------------------------------------\n";
    cout << "\t\tRegistered students : "<<endl;
    cout << "--------------------------------------------------------------------------------------------------\n\n\n";


    ifstream input("Student information.txt", ios::in);

    if(input.is_open())
    {
        while(input >> id >>FName>>LName >>contact >>email)
        {
            getline(input, detail);
            cout <<"\t"<< id<<"\t"<<FName<<" "<<LName<<"\t\t" <<contact<<"\t\t" <<email<<endl<<endl;
        }
        input.close();
    }
    cout << "\n\n\n\n\tPress any key to back previous menu.";
    if(getch())
    {
        system("cls");
        admin();
    }
}


void SearchStudent()
{
    int choice;
    string search_id, id, fname,lname, cont, email, course[7], detail;

    cout << "\n--------------------------------------------------------------------------------------------------\n\n\n";
    cout << "\t\tSearch student here"<<endl<<endl;
    cout<<"\tSearch Student ID : " ;
    cin>>search_id;

    ifstream Sstdnt("Student information.txt", ios::in );
    if(Sstdnt.is_open())
    {

        while(getline(cin, detail))
    {
        if(search_id == detail)
        {
            cout << "\n\tStudent ID : "<<id<<endl;
            cout << "\tName : "<<fname<<" "<<lname<<endl;
            cout << "\tContact No : "<<cont<<endl;
            cout << "\Email  : "<<email<<endl;
            cout << "\tEnrolled Courses : "<<course[1]<<"\t"<<course[2]<<"\t"<<course[3]<<"\t"<<course[4]<<"\t"<<course[5]<<endl;
            break;
        }
        else if(search_id != id)
           {
                cout<<"\t"<<search_id<<" has not registered yet by the administration.";
                break;
           }

      }
    }
    else
    {
        cout<<"\tSorry! Having some trouble. Please try again............";
        SearchStudent();
    }

    cout <<"\n\n\n\t| Press 1 to search another"<<endl;
    cout <<"\t| Press 2 to back previous menu"<<endl<<"\t ";
    cin>>choice;
    system("cls");

    switch(choice)
    {
    case 1:
        SearchStudent();
        break;
    case 2:
        admin();
        break;
    default:
        cout<<"Invalid choice!";
        admin();
    }


}


void student()
{
    string name;
    int input, choice, option, Count, id;


    cout <<"\t\t\t\t Your role has selected as a student \t"<<endl;
    cout << "--------------------------------------------------------------------------------------------------\n\n\n";

    cout << "                         Welcome to Student Record Management System                                                    \n\n";
    cout << "--------------------------------------------------------------------------------------------------\n";


    cout<<"Enter your student ID : ";
    cin>>input;

    ///FIle is not addressed properly.
    ifstream eId("Student_Registration_form.txt");
    while(eId >> input)
    {
        if(input == id)
        {
            Count=1;
            system("cls");
        }
    }
    eId.close();

    if(Count == 1)
    {
        cout << "                                           MENU                                                                       \n\n\n";

        cout << "\t |  Press 1 to see your details                          |"<<endl;
        cout << "\t |  Press 2 to search student                          |"<<endl;
        cout << "\t |  Press 3 to Exit                              |"<<endl <<  "\t ";
        cin >> option;
        system("cls");

        switch(option)
        {
        case 1:
            cout<<"Your detail to be displayed shortly";
            break;
        case 2:
            cout<<"Searched student to be presented";
            break;
        case 3:
            // cout<<"\n\tThank You for using our management system.\n\tThis system is developed by @Mahfujur Rahman."<<endl;
            exit;
        }
    }
    else
    {
        cout <<"This student ID is not registered yet by the administration. Try with another student ID.\n";
        student();
    }
}


int main()
{
    int role;

    cout << "--------------------------------------------------------------------------------------------------\n";
    cout << "                         Welcome to Student Record Management System                                                    \n\n";

role:
    cout <<" \t Select your Role \t"<<endl;
    cout << "\t | 1) Student                             |"<<endl;
    cout << "\t | 2) Admin                               |"<<endl<<endl;
    cout<<"\t Enter your choice : ";
    cin>>role;
    system("cls");

    switch(role)
    {
    case 1:
        cout <<"\t\t\t\t Your role has selected as a student \t"<<endl<<endl;
        cout << "--------------------------------------------------------------------------------------------------\n\n\n";
        {
            Role = 's';
            menu();
            break;
        }

    case 2:
        cout <<"\t\t\t\t Your role has selected as an admin \t"<<endl;
        cout << "--------------------------------------------------------------------------------------------------\n\n\n";
        {
            Role = 'a';
            menu();
            break;
        }

    default :
        cout << "\tInvalid role selection !! Try once again...."<<endl<<endl;
        goto role;
        break;
    }
    return 0;
}
