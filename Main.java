package sample;

public class Main {
	public static void main(String[]ager) {
	Hero h = new Hero();
	Sword s=new Sword("名前");
	System.out.println(s.name);
	h.sword=s;
	s.name="ただの";
	System.out.println("勇者の名前"+h.name+"勇者のHP"+h.hp+"勇者の持ち物"+h.sword.name);
	
	}
}
