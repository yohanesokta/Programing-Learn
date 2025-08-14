package com.yohanes;

public class Main {
    public static void main(String[] args) {
//        hero intel
        HeroIntel hero1 = new HeroIntel("Ucup",100);
        hero1.display();

//        up casting
        Hero heroUp = (Hero) hero1;
        heroUp.display();
//        Local variable 'heroUp' is redundant [ ada yang hilang ]


    }
}
