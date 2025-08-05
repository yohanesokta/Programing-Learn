import java.util.Scanner;

public class BasicInput {
    public static void main(String[] args){
        int panjang,lebar,luas;
        try (Scanner userInputs = new Scanner(System.in)) {
            // Memanggil Inputs
            // int input = userInputs.nextInt();
            // System.out.println("input = "+ input);
            System.out.print("Massukan Panjang : ");
            panjang = userInputs.nextInt();
            System.out.print("Massukan Lebar : ");
            lebar = userInputs.nextInt();
        }
        if (lebar > panjang) {
            System.out.println("Kenapa Lebar Lebih Tinggi Dari Panjang ??");
            return;
        }
        luas = panjang*lebar;
        System.out.println("Luas = " + luas);
    }
}