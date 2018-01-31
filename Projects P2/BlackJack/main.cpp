#pragma hdrstop
#pragma argsused

#ifdef _WIN32
#include <tchar.h>
#else
  typedef char _TCHAR;
  #define _tmain main
#endif

#include <stdio.h>
#include <windows.h>
#include <iostream>
#include <string>
#include <stdlib.h>

using namespace std;

int total = 0;   //  1 is a - 11 is boer - 12 is vrouw - 13 is heer
int dealertotal = 0;

void cards(string text, int value) {
	cout << text << value << endl;
}

int showstats(int total, int dealertotal) {
	int standorhit;

	cout << "\nDealer has a total of: " << dealertotal << endl;
	cout << "You have a total of: " << total << endl;
	cout << "\n1. Stand" << endl;
	cout << "2. Hit\n" << endl;
	cin >> standorhit;

	return standorhit;
}

	void dealercard() {
	srand(time(NULL));
	int dealerstartcard = (rand() % 11) + 1;

	dealertotal = dealertotal + dealerstartcard;


}

void mycard() {
	int randomcard  = (rand() % 11) + 1;

	total = total + randomcard;
}

void message(string message){
cout << message << endl;
}


int main() {
	system("Color 8f");
	SetConsoleDisplayMode(GetStdHandle(STD_OUTPUT_HANDLE),CONSOLE_FULLSCREEN_MODE,0);
	float version;
	version = 4.0;
	int start;
	int nextstep;

	mainmenu:
	cout << "BlackJack by Jelmer Halff and Rutger Pesman \nVersion: " << version <<"\n" << endl;
	cout << " - Press 1 to start" << endl;
	cout << " - press 2 for a tutorial" << endl;
	cout << " - Press 3 For update log.\n" << endl;
	cout << " - Press 4 to exit.\n" << endl;
	cin >> start;

	switch (start) {
		case 1:
			system("cls");
			dealercard();
			mycard();
			mycard();
			while (dealertotal <= 21 && total <= 21) {
					system("cls");

					nextstep = showstats(total, dealertotal);
					int hitcount;
					if (hitcount > 1){
					hitcount = 0;
					};
					int standcount;
					if (standcount > 1){
					standcount = 0;
					};




					switch (nextstep) {
						case 1:
								standcount = standcount + 1;
							 if (dealertotal < 17 ){
								dealercard();
								message("Dealer Hit");
								Sleep(2000);
								goto check;
								};
								message("Dealer Stand");
								Sleep(2000);
								standcount = standcount + 1;
								if(hitcount >= 1){
									if(dealertotal > total && dealertotal < 21){
                                        system("cls");
										goto lose;
									};
									if(dealertotal < total	&& total < 21){
										system("cls");
										goto win;
									};
									if(dealertotal == total){
										system("cls");
										goto draw;
									};
								};

									if (standcount > 1){
									if(dealertotal > total && dealertotal < 21){
										system("cls");
										goto lose;
									};
									if(dealertotal < total	&& total < 21){
										system("cls");
										goto win;
									};
									if(dealertotal == total){
										system("cls");
										goto draw;
									};
								};


						break;

						case 2:
								mycard();
								hitcount = hitcount + 1;
							 if (dealertotal < 17 ){
								dealercard();
								message("Dealer Hit");
								Sleep(2000);
								goto check;
								};
								message("Dealer Stand");
								Sleep(2000);
								standcount = standcount + 1;
								if(hitcount >= 2){
									if(dealertotal > total && dealertotal < 21){
										goto lose;
									};
									if(dealertotal < total	&& total < 21){
										goto win;
									};
									if(dealertotal == total){
										message("Draw");
										goto draw;
									};
								};
								 if (standcount > 2){
									if(dealertotal > total && dealertotal < 21){
										goto lose;
									};
									if(dealertotal < total	&& total < 21){
										goto win;
									};
									if(dealertotal == total){
										goto draw;
									};
								};


			   check:
					if (dealertotal > 21) {
						win:
						system("cls");
						message("You won!");
						draw:
						cards("Dealer has a total of: ", dealertotal);
						cards("You have a total of: ", total);
						message("\nYou wanne play again? \nType 1 to play!\nTo exit type 2.");
						int play;
						cin >> play;
						if( play == 1){
						system("cls");
						cin.clear();
						total = 0;
						dealertotal = 0;
						hitcount = 0;
						standcount = 0;
						goto mainmenu;
						} else if(play == 2){
							cin.clear();
							abort();
						};
					};

					if (total > 21) {
						lose:
						system("cls");
						message("You lost");
						cards("You have a total of: ", total);
						cards("Dealer has a total of: ", dealertotal);
						message("\nYou wanne play again? \nType 1 to play!\nTo exit type 2.");
						int play;
						cin >> play;
						if(play == 1){
						system("cls");
						cin.clear();
						total = 0;
						dealertotal = 0;
						hitcount = 0;
						standcount = 0;
						goto mainmenu;
						} else if(play == 2){
							cin.clear();
							abort();
						};
					};




					break;


		};
   };

		case 2:
			system("cls");
			message("Tutorial\n");
			message("At the start the dealer gets one card and you get two cards,\nYou can hit or stand, if you hit you will get one extra card and if you stand the dealer will get a card.\nthe first player that reaches 21 or more, loses and the closest one wins the game.");
			message("\nPress ANY key to continue.");
			getchar();
			system("cls");
		goto mainmenu;




		case 3:
			system("cls");
			message("Version Log \n");
			message("1.0 Basic game with simple blackjack.\n");
			message("2.0 Update Basic game with dealer randomly stands or hit.\n");
			message("3.0 Bug fix dealer plays more legit.\n");
			message("3.1 Fixed bugs, Created more bugs. New UI with advanced colors.\n");
			message("4.0 HUGE UPDATE in game mechanics smoother gameplay.\n");
			message("\nPress ANY key to continue.");
			getchar();
			system("cls");
			goto mainmenu;

		case 4:
			cin.clear();
			abort();

		default:
			system("cls");
			cout << "that is not a valid choice!" << endl;
			Sleep(500);
			system("cls");
			cout << "Returning to main menu..." << endl;
			Sleep(1000);
			system("cls");
			cin.clear();
			goto mainmenu;

 };

	getchar();
	return 0;
}
