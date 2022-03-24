#include <iostream>
#include <conio.h>
using namespace std;
	class Hitung{
		friend ostream& operator<<(ostream&, const Hitung&);
		friend istream& operator>>(istream&, Hitung&);
	public:
			Hitung();
			void hitung_jumlahnya(){jumlah = (a + b + c);
			}
		private:
			int a, b, c;
			int jumlah;
	};
	
Hitung ::Hitung(){
	cout <<"program menghitung jumlah 3 integer\n";
	cout <<" selamat berjarya\n";
}
 istream& operator>>(istream& in, Hitung& masukan) {
	cout << "Masukkan nilai a : ";
	cin >> masukan.a;
	cout << "Masukkan nilai b : ";
	cin >> masukan.b;
	cout << "Masukkan nilai c : ";
	cin >> masukan.c;
	
	return in;
}

ostream& operator<<(ostream& out, const Hitung& keluaran) {
	cout << "Nilai a : " << keluaran.a << endl; 
	cout << "Nilai b : " << keluaran.b << endl;
	cout << "Nilai c : " << keluaran.c << endl;  
	cout << "Jumlah 3 integer di atas : " << keluaran.jumlah << endl;
	
	return out;
	
}
main(){
	Hitung X;
	cin >>X;
	X.hitung_jumlahnya();
	cout<<X;
	getch();
	
return 0;
}

