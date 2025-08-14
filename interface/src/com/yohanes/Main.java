package com.yohanes;
import com.hero.Hero;
import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
        Hero hero1 = new Hero("Yohanes", 100);
        Hero hero2 = new Hero("Noval", 100);
        hero1.attack(hero2);

        Hero[] kumpulan = new Hero[2];

        kumpulan[0] = hero1;
        kumpulan[1] = hero2;

        for(Hero hero:kumpulan){
            hero.display();
        }

//        array list
        ArrayList<Hero> lisitHero = new ArrayList<Hero>();

//        menambah dengan add
        lisitHero.add(hero1);
        lisitHero.add(hero2);

        System.out.println(lisitHero);
//        merubah dengan set
        lisitHero.set(1,hero1);
        System.out.println(lisitHero);


        for(Hero hero:lisitHero) {
            hero.display();
        }



    }
}
