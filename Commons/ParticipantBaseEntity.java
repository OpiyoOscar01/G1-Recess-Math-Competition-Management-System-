package com.G_1.Recess.MathCompMagtSyst.Commons;


import com.G_1.Recess.MathCompMagtSyst.School.School;
import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import lombok.experimental.SuperBuilder;

import java.time.LocalDate;

@MappedSuperclass
@SuperBuilder
@Data
@AllArgsConstructor
@NoArgsConstructor
public class ParticipantBaseEntity {

@Column(name = "firstname")
private String firstName;

@Column(name = "lastname")
private String lastName;

@Column(name = "username")
private String username;

//@Email
@Column(name = "email", unique = true)
private String email;

@Column(name = "password")
private String password;
private String image;
private LocalDate date_of_birth;


//@ManyToOne
//@JoinColumn(name = "school_regNum")
//private School school;
}
