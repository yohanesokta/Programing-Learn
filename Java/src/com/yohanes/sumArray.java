import java.util.Arrays;

public class sumArray {
    public static void main(String[] args) {
      int[] arrayAngka = {1,6,5,4,8,9,3,7};
      int[] arrayAngka2 = {1,6,5,4,8,19,3,10};
     
      printArray(arrayAngka,"array1");  
      printArray(arrayAngka2,"array2");  
      int[] jumlah = penjumlahanArray(arrayAngka, arrayAngka2);
      printArray(jumlah,"penjumlahan");

    }

    private static int[] penjumlahanArray(int[] dataArray1, int[] dataArray2) {
        int[] result = new int[dataArray1.length];
        for (int i = 0; i < dataArray1.length; i++) {
            result[i] = dataArray1[i] + dataArray2[i];
        }
        return result;
    }

    private static void printArray(int[] dataArray,String message){
        System.out.println(message +" : "+Arrays.toString(dataArray));
    }
}
