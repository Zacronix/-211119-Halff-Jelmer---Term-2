#pragma hdrstop
#pragma argsused

#ifdef _WIN32
#include <tchar.h>
#else
  typedef char _TCHAR;
  #define _tmain main
#endif

#include <stdio.h>
#include <iostream>
#include <windows.h>

using namespace std;

int x;
int y;

float cof = 0.80;
float esp = 1.10;
float cap = 0.90;
float wat = 0.40;

float insertMoneyOptions [5] = { 1.00, 2.00, 0.50, 0.20, 0.10};
float insertedMoney = 0;
float cashBack = 0;


int main() {
	mainmenu:
	system("cls");
	cout << "=============================" << endl;
	cout << "                             " << endl;
	cout << "   Jelmer's Coffee Machine   " << endl;
	cout << "                             " << endl;
	cout << "=============================" << endl;
	cout << "                             " << endl;
	cout << " 1. Coffee      2. Espresso  " << endl;
	cout << "                             " << endl;
	cout << " 3. Cappucino   4. Hot water " << endl;
	cout << "                             " << endl;
	cout << "    Please enter choice:     " << endl;
	cout << "                             " << endl;
	cout << "=============================\n" << endl;
	cin >> x;

	switch (x) {
		case 1:
		cofmenu:
		system("cls");
		cout << "=============================" << endl;
		cout << "                             " << endl;
		cout << "      You chose: Coffee      " << endl;
		cout << "          Price: " << cof << endl;
		cout << "                             " << endl;
		cout << "=============================" << endl;
		cout << "                             " << endl;
		cout << "     1. 1.00    2. 2.00      " << endl;
		cout << "                             " << endl;
		cout << "     3. 0.50    4. 0.20      " << endl;
		cout << "                             " << endl;
		cout << "     5. 0.10    6. Cancel    " << endl;
		cout << "                             " << endl;
		cout << "=============================" << endl;

		if (insertedMoney != 0) {
		std::cout << "\nYou currently inserted: " << insertedMoney << std::endl;
		}

		cout << "\n    Please insert money: \n" << std::endl;
		cout << "=============================\n" << endl;
		cin >> y;
		cout << "\n=============================\n" << endl;

		if (y == 1) {
			  insertedMoney = insertedMoney + insertMoneyOptions[0];
			  if (insertedMoney < cof) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto cofmenu;
			  }
			  else {
				  cashBack = insertedMoney - cof;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 2) {
			  insertedMoney = insertedMoney + insertMoneyOptions[1];
			  if (insertedMoney < cof) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto cofmenu;
			  }
			  else {
				  cashBack = insertedMoney - cof;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 3) {
			  insertedMoney = insertedMoney + insertMoneyOptions[2];
			  if (insertedMoney < cof) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto cofmenu;
			  }
			  else {
				  cashBack = insertedMoney - cof;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 4) {
			  insertedMoney = insertedMoney + insertMoneyOptions[3];
			  if (insertedMoney < cof) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto cofmenu;
			  }
			  else {
				  cashBack = insertedMoney - cof;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 5) {
			  insertedMoney = insertedMoney + insertMoneyOptions[4];
			  if (insertedMoney < cof) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto cofmenu;
			  }
			  else {
				  cashBack = insertedMoney - cof;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 6) {
			if (insertedMoney == 0) {
				system("cls");
				std::cout << "Canceling..." << std::endl;
				Sleep(1500);
				goto mainmenu;
			} else {
				std::cout << "you will get back: " << insertedMoney << std::endl;
				Sleep(500);
				cout << "\nCanceling..." << endl;
				cout << "\n=============================" << endl;
				Sleep(4000);
				goto mainmenu;
			}
		}
		break;

		case 2:
		espmenu:
		system("cls");
		cout << "=============================" << endl;
		cout << "                             " << endl;
		cout << "      You chose: Espresso    " << endl;
		cout << "          Price: " << esp << endl;
		cout << "                             " << endl;
		cout << "=============================" << endl;
		cout << "                             " << endl;
		cout << "     1. 1.00    2. 2.00      " << endl;
		cout << "                             " << endl;
		cout << "     3. 0.50    4. 0.20      " << endl;
		cout << "                             " << endl;
		cout << "     5. 0.10    6. Cancel    " << endl;
		cout << "                             " << endl;
		cout << "=============================" << endl;

		if (insertedMoney != 0) {
		std::cout << "\nYou currently inserted: " << insertedMoney << std::endl;
		}

		cout << "\n    Please insert money: \n" << std::endl;
		cout << "=============================\n" << endl;
		cin >> y;
		cout << "\n=============================\n" << endl;

		if (y == 1) {
			  insertedMoney = insertedMoney + insertMoneyOptions[0];
			  if (insertedMoney < esp) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto espmenu;
			  }
			  else {
				  cashBack = insertedMoney - esp;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 2) {
			  insertedMoney = insertedMoney + insertMoneyOptions[1];
			  if (insertedMoney < esp) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto espmenu;
			  }
			  else {
				  cashBack = insertedMoney - esp;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 3) {
			  insertedMoney = insertedMoney + insertMoneyOptions[2];
			  if (insertedMoney < esp) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto espmenu;
			  }
			  else {
				  cashBack = insertedMoney - esp;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 4) {
			  insertedMoney = insertedMoney + insertMoneyOptions[3];
			  if (insertedMoney < esp) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto espmenu;
			  }
			  else {
				  cashBack = insertedMoney - esp;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 5) {
			  insertedMoney = insertedMoney + insertMoneyOptions[4];
			  if (insertedMoney < esp) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto espmenu;
			  }
			  else {
				  cashBack = insertedMoney - esp;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 6) {
			if (insertedMoney == 0) {
				system("cls");
				std::cout << "Canceling..." << std::endl;
				Sleep(1500);
				goto mainmenu;
			} else {
				std::cout << "you will get back: " << insertedMoney << std::endl;
				Sleep(500);
				cout << "\nCanceling..." << endl;
				cout << "\n=============================" << endl;
				Sleep(4000);
				goto mainmenu;
			}
		}
		break;

		case 3:
		capmenu:
		system("cls");
		cout << "=============================" << endl;
		cout << "                             " << endl;
		cout << "      You chose: Cappucino   " << endl;
		cout << "          Price: " << cap << endl;
		cout << "                             " << endl;
		cout << "=============================" << endl;
		cout << "                             " << endl;
		cout << "     1. 1.00    2. 2.00      " << endl;
		cout << "                             " << endl;
		cout << "     3. 0.50    4. 0.20      " << endl;
		cout << "                             " << endl;
		cout << "     5. 0.10    6. Cancel    " << endl;
		cout << "                             " << endl;
		cout << "=============================" << endl;

		if (insertedMoney != 0) {
		std::cout << "\nYou currently inserted: " << insertedMoney << std::endl;
		}

		cout << "\n    Please insert money: \n" << std::endl;
		cout << "=============================\n" << endl;
		cin >> y;
		cout << "\n=============================\n" << endl;

		if (y == 1) {
			  insertedMoney = insertedMoney + insertMoneyOptions[0];
			  if (insertedMoney < cap) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto capmenu;
			  }
			  else {
				  cashBack = insertedMoney - cap;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 2) {
			  insertedMoney = insertedMoney + insertMoneyOptions[1];
			  if (insertedMoney < cap) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto capmenu;
			  }
			  else {
				  cashBack = insertedMoney - cap;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 3) {
			  insertedMoney = insertedMoney + insertMoneyOptions[2];
			  if (insertedMoney < cap) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto capmenu;
			  }
			  else {
				  cashBack = insertedMoney - cap;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 4) {
			  insertedMoney = insertedMoney + insertMoneyOptions[3];
			  if (insertedMoney < cap) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto capmenu;
			  }
			  else {
				  cashBack = insertedMoney - cap;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 5) {
			  insertedMoney = insertedMoney + insertMoneyOptions[4];
			  if (insertedMoney < cap) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto capmenu;
			  }
			  else {
				  cashBack = insertedMoney - cap;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 6) {
			if (insertedMoney == 0) {
				system("cls");
				std::cout << "Canceling..." << std::endl;
				Sleep(1500);
				goto mainmenu;
			} else {
				std::cout << "you will get back: " << insertedMoney << std::endl;
				Sleep(500);
				cout << "\nCanceling..." << endl;
				cout << "\n=============================" << endl;
				Sleep(4000);
				goto mainmenu;
			}
		}
		break;

		case 4:
		watmenu:
		system("cls");
		cout << "=============================" << endl;
		cout << "                             " << endl;
		cout << "      You chose: Hot Water   " << endl;
		cout << "          Price: " << wat << endl;
		cout << "                             " << endl;
		cout << "=============================" << endl;
		cout << "                             " << endl;
		cout << "     1. 1.00    2. 2.00      " << endl;
		cout << "                             " << endl;
		cout << "     3. 0.50    4. 0.20      " << endl;
		cout << "                             " << endl;
		cout << "     5. 0.10    6. Cancel    " << endl;
		cout << "                             " << endl;
		cout << "=============================" << endl;

		if (insertedMoney != 0) {
		std::cout << "\nYou currently inserted: " << insertedMoney << std::endl;
		}

		cout << "\n    Please insert money: \n" << std::endl;
		cout << "=============================\n" << endl;
		cin >> y;
		cout << "\n=============================\n" << endl;

		if (y == 1) {
			  insertedMoney = insertedMoney + insertMoneyOptions[0];
			  if (insertedMoney < wat) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto watmenu;
			  }
			  else {
				  cashBack = insertedMoney - wat;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 2) {
			  insertedMoney = insertedMoney + insertMoneyOptions[1];
			  if (insertedMoney < wat) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto watmenu;
			  }
			  else {
				  cashBack = insertedMoney - wat;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 3) {
			  insertedMoney = insertedMoney + insertMoneyOptions[2];
			  if (insertedMoney < wat) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto watmenu;
			  }
			  else {
				  cashBack = insertedMoney - wat;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 4) {
			  insertedMoney = insertedMoney + insertMoneyOptions[3];
			  if (insertedMoney < wat) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto watmenu;
			  }
			  else {
				  cashBack = insertedMoney - wat;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 5) {
			  insertedMoney = insertedMoney + insertMoneyOptions[4];
			  if (insertedMoney < wat) {
				  cout << "Please insert more money." << endl;
				  Sleep(500);
				  goto watmenu;
			  }
			  else {
				  cashBack = insertedMoney - wat;
				  cout << "you will get back: " << cashBack << endl;
				  cout << "\n=============================" << endl;
			  }
		}

		if (y == 6) {
			if (insertedMoney == 0) {
				system("cls");
				std::cout << "Canceling..." << std::endl;
				Sleep(1500);
				goto mainmenu;
			} else {
				std::cout << "you will get back: " << insertedMoney << std::endl;
				Sleep(500);
				cout << "\nCanceling..." << endl;
				cout << "\n=============================" << endl;
				Sleep(4000);
				goto mainmenu;
			}
		}
		break;

		default:
		system("cls");
		cout << "System failure!!\n" <<endl;
		cout << "Going back to Main Menu..." << endl;
		Sleep(3000);
		goto mainmenu;
	}

	system("pause");
}
