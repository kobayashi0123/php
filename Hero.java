public class Hero {
	String name;
	int hp;
	Sword sword;
	//new Sword("風の剣");
	//this.sword.name="たたた";
	public Hero(String name) {
		this.name = name;
		this.hp = 100;
		//new Sword("水の剣");
		//this.sword.name("炎の剣");
	}
	public Hero() {
		this("ホビー");
	}
}
