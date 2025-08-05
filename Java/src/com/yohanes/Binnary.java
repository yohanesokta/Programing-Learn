public class Binnary {
    public static void main(String[] args){
        byte a = 10;
        String aBits;
        aBits = String.format("%8s",Integer.toBinaryString(a)).replace(' ', '0');
        System.out.printf("%s = %d \n",aBits,a);
    }
}