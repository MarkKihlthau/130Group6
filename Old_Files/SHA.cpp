#include <iostream>
#include <string>

using namespace std;

int main()
{
	unsigned int h0 = 0x6a09e667;
	unsigned int h1 = 0xbb67ae85;
	unsigned int h2 = 0x3c6ef372;
	unsigned int h3 = 0xa54ff53a;
	unsigned int h4 = 0x510e527f;
	unsigned int h5 = 0x9b05688c;
	unsigned int h6 = 0x1f83d9ab;
	unsigned int h7 = 0x5be0cd19;

	unsigned int k[64];
	
	k[0] = 0x428a2f98;
	k[1] = 0x71374491;
	k[2] = 0xb5c0fbcf;
	k[3] = 0xe9b5dba5;
	k[4] = 0x3956c25b;
	k[5] = 0x59f111f1;
	k[6] = 0x923f82a4;
	k[7] = 0xab1c5ed5;
	k[8] = 0xd807aa98;
	k[9] = 0x12835b01;
	k[10] = 0x243185be;
	k[11] = 0x550c7dc3;
	k[12] = 0x72be5d74;
	k[13] = 0x80deb1fe;
	k[14] = 0x9bdc06a7;
	k[15] = 0xc19bf174;
	k[16] = 0xe49b69c1;
	k[17] = 0xefbe4786;
	k[18] = 0x0fc19dc6;
	k[19] = 0x240ca1cc;
	k[20] = 0x2de92c6f;
	k[21] = 0x4a7484aa;
	k[22] = 0x5cb0a9dc;
	k[23] = 0x76f988da;
	k[24] = 0x983e5152;
	k[25] = 0xa831c66d;
	k[26] = 0xb00327c8;
	k[27] = 0xbf597fc7;
	k[28] = 0xc6e00bf3;
	k[29] = 0xd5a79147;
	k[30] = 0x06ca6351;
	k[31] = 0x14292967;
	k[32] = 0x27b70a85;
	k[33] = 0x2e1b2138;
	k[34] = 0x4d2c6dfc;
	k[35] = 0x53380d13;
	k[36] = 0x650a7354;
	k[37] = 0x766a0abb;
	k[38] = 0x81c2c92e;
	k[39] = 0x92722c85;
	k[40] = 0xa2bfe8a1;
	k[41] = 0xa81a664b;
	k[42] = 0xc24b8b70;
	k[43] = 0xc76c51a3;
	k[44] = 0xd192e819;
	k[45] = 0xd6990624;
	k[46] = 0xf40e3585;
	k[47] = 0x106aa070;
	k[48] = 0x19a4c116;
	k[49] = 0x1e376c08;
	k[50] = 0x2748774c;
	k[51] = 0x34b0bcb5;
	k[52] = 0x391c0cb3;
	k[53] = 0x4ed8aa4a;
	k[54] = 0x5b9cca4f;
	k[55] = 0x682e6ff3;
	k[56] = 0x748f82ee;
	k[57] = 0x78a5636f;
	k[58] = 0x84c87814;
	k[59] = 0x8cc70208;
	k[60] = 0x90befffa;
	k[61] = 0xa4506ceb;
	k[62] = 0xbef9a3f7;
	k[63] = 0xc67178f2;

	string msg;
	unsigned int a;
	unsigned int K;
	unsigned int strsize;
	unsigned char byte = 0b01;
	cout << "Please input your message: ";
	cin >> msg;
	
	msg.append((const char*)byte); //1 bit padding

	a = stoi(msg);
	
	if (a >= 64) //don't allow 64 character passwords
	{
		cout << "\n\nError!\n\n";
		exit(0);
	}

	K = 512 - a;

	byte = 0x00;
	for (K; K > 0; K--) //0 bit padding
	{
		msg.append((const char*)byte);
	}

	strsize = msg.size();
	strsize = strsize * 8; //number of bits in message length


}
